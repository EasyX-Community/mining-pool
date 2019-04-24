import React, { lazy, Suspense } from 'react'
import { Switch, Route } from 'react-router-dom'

const Dashboard = lazy(() => import('@pages/Dashboard'))
const Wallet = lazy(() => import('@pages/Wallet'))

export default () => (
  <Switch>
    <Suspense fallback={<div>Loading...</div>}>
      <Route exact path="/" component={Dashboard} />
      <Route path="/wallet" component={Wallet} />
    </Suspense>
  </Switch>
)
