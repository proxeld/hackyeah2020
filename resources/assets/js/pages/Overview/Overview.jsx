import Helmet from 'react-helmet'
import React, {Component, Fragment} from 'react'
import {connect} from 'react-redux'

import {currentUserSelector} from 'store/selectors/session'
import {List, Map} from 'immutable'
import {getVoucherList} from '../../services/api/company-vouchers'
import Transformer from '../../utils/Transformer'
import {getFinances} from '../../services/api/company-finances'
import VouchersTableExtended from '../../components/VouchersTable/VouchersTableExtended'
import VouchersChartWidget from '../../components/VouchersTable/VouchersChartWidget'

// import {VoucheryTable} from '../../components/VoucheryTable/VoucheryTable'

class OverviewComponent extends Component {
  constructor(props) {
    super(props)
    this.state = {
      vouchers: List(),
      finances: Map({
        voucher_statistics_day: List(),
        voucher_statistics_kind: List(),
        statistics: Map(
          {
            this_month_vouchers: 0,
            this_month_incomes: 0,
            this_month_orders: 0,
            total_vouchers: 0,
            total_incomes: 0,
            total_orders: 0
          }
        )
      })
    }
    this.handleEdit = ::this.handleEdit
    this.handleDelete = ::this.handleDelete
  }

  componentDidMount() {
    getVoucherList()
      .then((v) => {
        this.setState({
          vouchers: List(v.map((s) => Transformer.objectToCamelCase(s)))
        })
      })

    getFinances()
      .then((v) => {
        const {finances} = this.state

        this.setState({
          finances: finances
            .set('voucher_statistics_day', List(v.voucher_statistics_day.map((v) => Map(v))))
            .set('voucher_statistics_kind', List(v.voucher_statistics_kind.map((v) => Map(v))))
            .set('statistics', Map(v.statistics))
        })
      })
  }

  handleEdit(id, data) {
    const {vouchers} = this.state
    this.setState({
      vouchers: vouchers.map((v) => (v.id === id ? Transformer.objectToCamelCase(data) : v))
    })
  }

  handleDelete(id) {
    const {vouchers} = this.state
    this.setState({
      vouchers: vouchers.filter((v) => (v.id !== id))
    })
  }

  render() {
    const {finances, vouchers} = this.state
    const voucherFinances = finances.get('statistics')

    return (
      <Fragment>
        <Helmet>
          <title>Dashboard</title>
        </Helmet>

        <div className="row">
          <div className="col-xl-12">
            <div className="kt-portlet__body  kt-portlet__body--fit">
              <div className="row">
                <div className="col-xl-6">
                  <VouchersChartWidget chartEntries={finances.get('voucher_statistics_day')}/>
                </div>
                <div className="col-xl-6">
                  <div className="kt-portlet">
                    <div className="kt-portlet__body kt-portlet__body--fit">
                      <div className="row row-no-padding row-col-separator-xl">
                        <div className="col-md-12 col-lg-12 col-xl-6">
                          <div className="kt-widget1">
                            <div className="kt-widget1__item">
                              <div className="kt-widget1__info">
                                <h3 className="kt-widget1__title">Przychody</h3>
                                <span className="kt-widget1__desc">Za ten miesiąc</span>
                              </div>
                              <span
                                className="kt-widget1__number kt-font-brand">{voucherFinances.get('this_month_incomes')}</span>
                            </div>

                            <div className="kt-widget1__item">
                              <div className="kt-widget1__info">
                                <h3 className="kt-widget1__title">Zamówienia</h3>
                                <span className="kt-widget1__desc">Za ten miesiąc</span>
                              </div>
                              <span
                                className="kt-widget1__number kt-font-danger">{voucherFinances.get('this_month_orders')}</span>
                            </div>

                            <div className="kt-widget1__item">
                              <div className="kt-widget1__info">
                                <h3 className="kt-widget1__title">Vouchery</h3>
                                <span className="kt-widget1__desc">Za ten miesiąc</span>
                              </div>
                              <span
                                className="kt-widget1__number kt-font-success">{voucherFinances.get('this_month_vouchers')}</span>
                            </div>
                          </div>
                        </div>

                        <div className="col-md-12 col-lg-12 col-xl-6">

                          <div className="kt-widget1">
                            <div className="kt-widget1__item">
                              <div className="kt-widget1__info">
                                <h3 className="kt-widget1__title">Przychody</h3>
                                <span className="kt-widget1__desc">Razem</span>
                              </div>
                              <span
                                className="kt-widget1__number kt-font-brand">{voucherFinances.get('total_incomes')}</span>
                            </div>

                            <div className="kt-widget1__item">
                              <div className="kt-widget1__info">
                                <h3 className="kt-widget1__title">Zamówienia</h3>
                                <span className="kt-widget1__desc">Razem</span>
                              </div>
                              <span
                                className="kt-widget1__number kt-font-danger">{voucherFinances.get('total_orders')}</span>
                            </div>

                            <div className="kt-widget1__item">
                              <div className="kt-widget1__info">
                                <h3 className="kt-widget1__title">Vouchery</h3>
                                <span className="kt-widget1__desc">Razem</span>
                              </div>
                              <span
                                className="kt-widget1__number kt-font-success">{voucherFinances.get('total_vouchers')}</span>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <VouchersTableExtended vouchers={vouchers} handleEdit={this.handleEdit} handleDelete={this.handleDelete}/>

      </Fragment>
    )
  }
}

export default connect(
  (state) => ({
    user: currentUserSelector(state)
  })
)(OverviewComponent)
