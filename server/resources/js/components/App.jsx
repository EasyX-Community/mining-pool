import React, { Component, Suspense } from 'react'
import ReactDOM from 'react-dom'
import { ApolloProvider } from 'react-apollo'
import ApolloClient from 'apollo-boost'
import Layout from './Layout'
import 'antd/dist/antd.css'

const client = new ApolloClient({
  uri: '127.0.0.1',
})

export default class App extends Component {
  render() {
    return (
        <ApolloProvider client={client}>
          <Layout />
        </ApolloProvider>
    )
  }
}

if (document.getElementById('root')) {
  ReactDOM.render(<App />, document.getElementById('root'))
}
