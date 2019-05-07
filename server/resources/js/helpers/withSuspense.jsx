import React, { Component, Suspense } from 'react'
import Spinner from '@/components/Spinner'

export const withSuspense = WrappedComponent => {
  class HOC extends Component {
    render() {
      return (
        <Suspense fallback={<Spinner />}>
          <WrappedComponent {...this.props} />
        </Suspense>
      )
    }
  }
  return HOC
}

export default withSuspense
