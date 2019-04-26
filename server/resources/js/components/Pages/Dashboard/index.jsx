import React from 'react'
import { Breadcrumb, Layout, PageHeader, Typography } from 'antd'
import { PoolStatus } from '@mining'
const { Content } = Layout
const { Paragraph } = Typography
import styled from '@emotion/styled'
import {
  withModalConsumer,
  QuickStartModal,
  ProductDocModal,
  ProductInfoModal,
} from '@modals'
import { compose } from 'recompose'

const RightContent = styled.div`
  min-width: 240px;
  text-align: right;
`

const MainContent = styled.div`
  flex: 1;
`

const ContentWrapper = styled.div`
  display: flex;
`

const ContentLinks = styled.div`
  padding-top: 16px;
`

const ContentLink = styled.a`
  display: inline-block;
  vertical-align: text-top;
  margin-right: 32px;
  color: #1890ff;
  text-decoration: none;
  background-color: transparent;
  outline: none;
  cursor: pointer;
`

const ContentLinkImage = styled.img`
  margin-right: 8px;
`

const content = showModal => (
  <MainContent>
    <Paragraph>
      Introducing a modern user expierence for managing your mining pool. This
      project is maintained by the HelixAlpha Blockchain Initivie.
    </Paragraph>
    <Paragraph>
      Payouts are made hourly for all balances above 0.01 for every coin. Some
      coins can have a long delay with payout, so plan accordingly. Please wait
      at least 24 hours before contact support.
    </Paragraph>
    <ContentLinks>
      <ContentLink
        onClick={() => {
          showModal(QuickStartModal, { isOpen: true })
        }}
      >
        <ContentLinkImage
          src="https://gw.alipayobjects.com/zos/rmsportal/MjEImQtenlyueSmVEfUD.svg"
          alt="start"
        />
        Quick Start
      </ContentLink>
      <ContentLink
        onClick={() => {
          showModal(ProductInfoModal, { isOpen: true })
        }}
      >
        <ContentLinkImage
          src="https://gw.alipayobjects.com/zos/rmsportal/NbuDUAuBlIApFuDvWiND.svg"
          alt="info"
        />
        Product Info
      </ContentLink>
      <ContentLink
        onClick={() => {
          showModal(ProductDocModal, { isOpen: true })
        }}
      >
        <ContentLinkImage
          src="https://gw.alipayobjects.com/zos/rmsportal/ohOEPSYdDTNnyMbGuyLb.svg"
          alt="doc"
        />
        Product Doc
      </ContentLink>
    </ContentLinks>
  </MainContent>
)

const extraContent = (
  <img
    src="https://gw.alipayobjects.com/mdn/mpaas_user/afts/img/A*KsfVQbuLRlYAAAAAAAAAAABjAQAAAQ/original"
    alt="content"
  />
)

export const Dashboard = ({ showModal }) => (
  <div>
    <Breadcrumb style={{ margin: '16px 0' }}>
      <Breadcrumb.Item>Dashboard</Breadcrumb.Item>
    </Breadcrumb>
    <PageHeader title="Dark Matter Mining Pool ">
      <ContentWrapper>
        <MainContent>{content(showModal)}</MainContent>
        <RightContent>{extraContent}</RightContent>
      </ContentWrapper>
    </PageHeader>
    <Content
      style={{
        background: '#fff',
        padding: 24,
        margin: 0,
        minHeight: 280,
      }}
    >
      <PoolStatus />
    </Content>
  </div>
)

export default compose(withModalConsumer)(Dashboard)
