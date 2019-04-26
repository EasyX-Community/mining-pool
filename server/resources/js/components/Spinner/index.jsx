import React from 'react'
import { Spin } from 'antd'
import styled from '@emotion/styled'

const SpinnerWrapper = styled.div`
  text-align: center;
  background: rgba(0, 0, 0, 0.05);
  border-radius: 4px;
  margin-bottom: 20px;
  padding: 30px 50px;
  margin: 20px 0;
`

export default () => (
  <SpinnerWrapper>
    <Spin />
  </SpinnerWrapper>
)
