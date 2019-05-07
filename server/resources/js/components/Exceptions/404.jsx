import React from 'react'
import { Exception } from 'antd'
import { compose } from 'recompose'
import withSuspense from '../../helpers/withSuspense'
import { default as BaseLayout } from '@layout'

export const NotFound = () => (
  <BaseLayout>
    <Exception type="404" />
  </BaseLayout>
)

export default compose(withSuspense)(NotFound)
