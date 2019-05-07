import React from 'react'
import { Spin } from 'antd'
import styled from '@emotion/styled'

const SpinnerWrapper = styled.div`
  display: flex;
  width: 100%;
  height: 100vh;
  justify-content: center;
  align-items: center;
`

export default () => (
  <SpinnerWrapper>
    <Spin />
  </SpinnerWrapper>
)
