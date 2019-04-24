import React, { Component } from 'react'
import styled from '@emotion/styled'
import { Layout, Menu, Breadcrumb, Icon } from 'antd'
import { Link } from "react-router-dom";

const Logo = styled.div`
  height: 32px;
  background: rgba(255, 255, 255, 0.2);
  margin: 16px;
`
const { Sider } = Layout
const SubMenu = Menu.SubMenu

export default ({ collapsed, onCollapse }) => (
  <Sider collapsible collapsed={collapsed} onCollapse={onCollapse} style={{
    boxShadow: "2px 0 6px rgba(0,21,41,.35)"
}}>
    <Logo />
    <Menu theme="dark" defaultSelectedKeys={['1']} mode="inline">
      <Menu.Item key="1">
        <Icon type="pie-chart" />
        <span>Deshboard</span>
        <Link to="/" />
      </Menu.Item>
      <Menu.Item key="2">
        <Icon type="wallet" />
        <span>Wallet</span>
        <Link to="/wallet" />
      </Menu.Item>
      <Menu.Item key="3">
        <Icon type="desktop" />
        <span>Option 2</span>
      </Menu.Item>
      <SubMenu
        key="sub1"
        title={
          <span>
            <Icon type="user" />
            <span>User</span>
          </span>
        }
      >
        <Menu.Item key="4">Tom</Menu.Item>
        <Menu.Item key="5">Bill</Menu.Item>
        <Menu.Item key="6">Alex</Menu.Item>
      </SubMenu>
      <SubMenu
        key="sub2"
        title={
          <span>
            <Icon type="team" />
            <span>Team</span>
          </span>
        }
      >
        <Menu.Item key="6">Team 1</Menu.Item>
        <Menu.Item key="8">Team 2</Menu.Item>
      </SubMenu>
      <Menu.Item key="9">
        <Icon type="file" />
        <span>File</span>
      </Menu.Item>
    </Menu>
  </Sider>
)
