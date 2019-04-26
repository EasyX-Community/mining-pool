import React, { createElement } from 'react'
import { Button } from 'antd'

import styled from '@emotion/styled'

const PageWrapper = styled.div`
  display: flex;
  align-items: center;
  height: 80%;
  min-height: 500px;
`

const ImageBlock = styled.div`
  flex: 0 0 62.5%;
  width: 62.5%;
  padding-right: 152px;
  zoom: 1;
  &::before,
  &::after {
    display: table;
    content: ' ';
  }
  &::after {
    clear: both;
    height: 0;
    font-size: 0;
    visibility: hidden;
  }
`

const ImageElement = styled.div`
  float: right;
  width: 100%;
  max-width: 430px;
  height: 360px;
  background-repeat: no-repeat;
  background-position: 50% 50%;
  background-size: contain;
`

const ContentWrapper = styled.div`
  flex: auto;
`

const ExceptionTitle = styled.div`
  margin-bottom: 24px;
  color: #434e59;
  font-weight: 600;
  font-size: 72px;
  line-height: 72px;
`

const Actions = styled.div`
  button:not(:last-child) {
    margin-right: 8px;
  }
`

const Description = styled.div`
  margin-bottom: 16px;
  color: #434e59;
  font-size: 20px;
  line-height: 28px;
`

class Exception extends React.PureComponent {
  static defaultProps = {
    backText: 'back to home',
    redirect: '/',
  }

  constructor(props) {
    super(props)
    this.state = {}
  }

  render() {
    const {
      className,
      backText,
      linkElement = 'a',
      type,
      title,
      desc,
      actions,
      redirect,
      ...rest
    } = this.props

    const img =
      'https://gw.alipayobjects.com/zos/rmsportal/KpnpchXsobRgLElEozzI.svg'

    return (
      <PageWrapper>
        <ImageBlock>
          <ImageElement style={{ backgroundImage: `url(${img})` }} />
        </ImageBlock>
        <ContentWrapper>
          <ExceptionTitle>404</ExceptionTitle>
          <Description>Sorry, the page you visited doesn't exist.</Description>
          <Actions />
        </ContentWrapper>
      </PageWrapper>
    )
  }
}

export default Exception
