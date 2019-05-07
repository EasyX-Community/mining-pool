import React from 'react'
import { Breadcrumb } from 'antd'
import { withSuspense } from '@helpers/withSuspense'
import { compose } from 'recompose'

export const Wallet = () => (
  <div>
    <Breadcrumb style={{ margin: '16px 0' }}>
      <Breadcrumb.Item>Dashboard</Breadcrumb.Item>
      <Breadcrumb.Item>Wallet</Breadcrumb.Item>
    </Breadcrumb>
    Test
  </div>
)

export default Wallet
