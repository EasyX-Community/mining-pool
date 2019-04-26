import React, { Component, Suspense } from 'react'
import { Layout } from 'antd'
import Sider from './Menu/Sider'
import Routes from '@/components/Routes'
import { BrowserRouter } from 'react-router-dom'
import Spinner from '@/components/Spinner'

const { Header, Content, Footer } = Layout

class LayoutBase extends Component {
  state = {
    collapsed: false,
  }

  onCollapse = collapsed => {
    console.log(collapsed)
    this.setState({ collapsed })
  }

  render() {
    return (
      <BrowserRouter>
        <Layout style={{ minHeight: '100vh' }}>
          <Sider
            collapsed={this.state.collapsed}
            onCollapse={this.onCollapse}
          />
          <Layout>
            <Header
              style={{
                background: '#fff',
                padding: 0,
                boxShadow: ' 0 1px 4px rgba(0,21,41,.08)',
              }}
            />
            <Suspense fallback={<Spinner />}>
              <Content style={{ margin: '0 16px' }}>
                <Routes />
              </Content>
           </Suspense>
            <Footer style={{ textAlign: 'center' }}>
              DarkMatter Mining Pool &copy;2019; Created by HelixAlpha, Inc.
            </Footer>

          </Layout>
        </Layout>
      </BrowserRouter>
    )
  }
}

export default LayoutBase
