import React from 'react'

import { AppHeader, AppFooter } from 'components'
import { VouchersTable } from '../components/VouchersTable/VouchersTable';

export const DashboardLayout = props => (
  <div>
    <AppHeader />
    <div className="container mt-5">
      <div className="row">
        <div className="col-12">
          <VouchersTable/>
        </div>
      </div>
    </div>
    <div className="max-w-2xl mx-auto mt-10 px-4">{props.children}</div>
    <AppFooter />
  </div>
)
