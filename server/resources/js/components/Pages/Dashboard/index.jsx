import React from 'react'
import { Breadcrumb, Layout } from 'antd'
import { PoolStatus } from '@mining'

const { Content } = Layout;

export default () => (
    <div>
    <Breadcrumb style={{ margin: '16px 0' }}>
        <Breadcrumb.Item>Dashboard</Breadcrumb.Item>
    </Breadcrumb>
    <Content style={{
          background: '#fff', padding: 24, margin: 0, minHeight: 280,
        }}
        >

        <PoolStatus />
    </Content>
    </div>
)