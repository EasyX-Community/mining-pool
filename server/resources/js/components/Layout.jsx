import React, { Component } from 'react'
import { Layout, Menu, Breadcrumb, Icon } from 'antd'
import styled from '@emotion/styled'
import Sider from './Menu/Sider'
import Routes from '@/components/Routes'
import { BrowserRouter } from 'react-router-dom'

const MenuItemGroup = Menu.ItemGroup
const { Header, Content, Footer } = Layout
const SubMenu = Menu.SubMenu

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
        <Sider collapsed={this.state.collapsed} onCollapse={this.onCollapse} />
        <Layout>
          <Header style={{ background: '#fff', padding: 0 }} />
            <Content style={{ margin: '0 16px' }}>
              <Routes />
            </Content>
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
