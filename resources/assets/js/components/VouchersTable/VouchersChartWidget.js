import React, {Component} from 'react'
import PropTypes from 'prop-types'
import sortBy from 'lodash/sortBy'
import {List} from 'immutable'

import {DEFAULT_DASHBOARD_FINANCE_CHART_FILTERS, LAST_12_MONTHS} from '../../utils/GlobalConfig'
import {filterEntries} from '../../utils/GlobalHelper'
import VoucherDaysChart from './VoucherDaysChart'
import DashboardPortlet from '../Dashboard/DashboardPorlet'
import moment from 'moment'

class VouchersChartWidget extends Component {
  constructor(props) {
    super(props)
    this.selectVouchersFilter = ::this.selectVouchersFilter
    this.state = {
      activeVouchersFilter: {
        value: LAST_12_MONTHS
      }
    }
  }

  selectVouchersFilter(filter) {
    this.setState({
      activeVouchersFilter: filter
    })
  }

  render() {
    const {activeVouchersFilter} = this.state
    const {chartEntries, dateField = 'created_at', title = 'Statystyki'} = this.props
    const filters = DEFAULT_DASHBOARD_FINANCE_CHART_FILTERS
    const activeVouchers = activeVouchersFilter || filters[0]

    let {filteredEntries, start, end} = filterEntries(chartEntries, activeVouchers, {
      dateField
    })
    let sortedVouchers = sortBy(filteredEntries.map((item) => (
      item.toObject()
    )).toArray(), 'name', 'asc')

    if (sortedVouchers.length > 0 && start && end) {
      let arr = []
      let m = {}
      sortedVouchers.forEach((s) => {
        const v = s[dateField]
        m[v] = s
      })

      let a = moment(start)
      let b = moment(end)
      for (let c = a; c < b; c = c.add(1, 'day')) {
        let f = c.format('YYYY-MM-DD')
        let v = m[f]
        if (v) {
          arr.push(v)
        } else {
          v = {
            total: 0
          }
          v[dateField] = f
          arr.push(v)
        }
      }
      sortedVouchers = arr
    }

    const articlesActions = (
      <ul className="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand">
        {filters.map((filter) => (
          <li className={`nav-item filter ${filter.value === activeVouchersFilter.value ? ' active' : ''}`}
              key={filter.value}
              onClick={() => this.selectVouchersFilter(filter)}>
            <a className="nav-link">
              {filter.name}
            </a>
          </li>
        ))}
      </ul>)

    return (<DashboardPortlet title={title} actions={articlesActions}>
      {sortedVouchers.length <= 0 && <p>No data for this period</p>}
      <VoucherDaysChart entries={sortedVouchers}/>
    </DashboardPortlet>)
  }
}

VouchersChartWidget.propTypes = {
  chartEntries: PropTypes.instanceOf(List),
  dateField: PropTypes.string,
  title: PropTypes.string
}

export default VouchersChartWidget
