import React, { Component, Suspense, lazy } from 'react'
import ReactDOM from 'react-dom'
import { ApolloProvider } from 'react-apollo'
import { ApolloClient } from 'apollo-client'
import { Modal } from 'antd'
import { ModalRoot, withModalProvider } from '@modals'
import 'antd/dist/antd.css'
import { ApolloLink } from 'apollo-link'
import { HttpLink } from 'apollo-link-http'
import { onError } from 'apollo-link-error'
import { InMemoryCache } from 'apollo-cache-inmemory'
import { compose } from 'recompose'
import { Global, css } from '@emotion/core'
import Routes from './Routes'
import { withLayoutProvider } from '@layout/Context'
import { BrowserRouter } from 'react-router-dom'
import Layout from '@layout'
import { CookiesProvider, withCookies } from 'react-cookie'
import AuthProvider, { AuthConsumer, AuthRoutes } from '@auth'
import { IntlProvider } from 'react-intl'

const cache = new InMemoryCache()

const token = document.head.querySelector('meta[name="csrf-token"]').content

//Sets the headers using Apollo Http Link
const httpLink = new HttpLink({
  uri: 'graphql',
  headers: {
    'X-CSRF-TOKEN': token,
    'X-Requested-With': 'XMLHttpRequest',
    Accept: 'application/json',
  },
})

const errorLink = onError(({ graphQLErrors, networkError }) => {
  if (graphQLErrors)
    graphQLErrors.map(({ message, locations, path }) => {
      console.log(
        `[GraphQL error]: Message: ${message}, Location: ${locations}, Path: ${path}`
      )
      error('Unexpected GraphQL Error', message)
    })

  if (networkError) {
    error('Network Error', 'An unexpected network error occurred.')
    console.log(`[Network error]: ${networkError}`)
  }
})

function error(title, content) {
  Modal.error({
    title: title,
    content: content,
  })
}

const link = ApolloLink.from([errorLink, httpLink])

const client = new ApolloClient({
  link,
  cache,
  connectToDevTools: true,
})

const global = css`
  .language-php .code .language-bash {
    background-color: rgba(27, 31, 35, 0.05);
    border-radius: 3px;
    font-size: 85%;
    margin: 0;
    padding: 0.2em 0.4em;
  }
`

export class App extends Component {
  componentDidCatch(error, info) {
    console.error(error, info)
    Modal.error({
      title: error,
      content: info,
    })
  }

  componentDidMount() {}

  render() {
    return (
      <IntlProvider  locale='en'>
      <CookiesProvider>
        <BrowserRouter>
          <ApolloProvider client={client} cache={cache}>
            <AuthProvider>
              <Global styles={global} />
              <AuthConsumer>
                {auth =>
                  auth.isAuthenticated ? (
                    <>
                      <Layout>
                        <Routes />
                      </Layout>
                      <ModalRoot />
                    </>
                  ) : (
                    <AuthRoutes />
                  )
                }
              </AuthConsumer>
            </AuthProvider>
          </ApolloProvider>
        </BrowserRouter>
      </CookiesProvider>
      </IntlProvider>
    )
  }
}

export const BaseApp = compose(
  withModalProvider,
  withLayoutProvider
)(App)

if (document.getElementById('root')) {
  ReactDOM.render(<BaseApp />, document.getElementById('root'))
}
