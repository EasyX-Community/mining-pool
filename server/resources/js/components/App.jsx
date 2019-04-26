import React, { Component, Suspense } from 'react'
import ReactDOM from 'react-dom'
import { ApolloProvider } from 'react-apollo'
import { ApolloClient } from 'apollo-client'
import Layout from './Layout'
import { Modal } from 'antd'
import { ModalRoot, withModalProvider } from '@modals'
import 'antd/dist/antd.css'
import { ApolloLink } from 'apollo-link'
import { createHttpLink } from 'apollo-link-http'
import { onError } from 'apollo-link-error'
import { InMemoryCache } from 'apollo-cache-inmemory'
import { ModalContext } from '@modals'
import { compose } from 'recompose'
import { Global, css } from '@emotion/core'

const cache = new InMemoryCache()

const httpLink = createHttpLink({ uri: 'graphql' })

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

  render() {
    return (
      <ApolloProvider client={client} cache={cache}>
        <Global styles={global} />
        <Layout />
        <ModalRoot />
      </ApolloProvider>
    )
  }
}

export const BaseApp = compose(withModalProvider)(App)

if (document.getElementById('root')) {
  ReactDOM.render(<BaseApp />, document.getElementById('root'))
}
