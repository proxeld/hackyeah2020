import React from 'react'

import './voucher.scss'

export const Voucher = (props) => {

  return (
    <div className="voucher p-4 w-100" styleName="voucher">
      <div className="voucher-inner p-5" styleName="voucher-inner">
        <div className="row my-5">
          <div className="col-6 text-center" styleName="left-side">
            <h2 className="voucher-company-name mb-4">Company name</h2>
            <div className="voucher-fancy-text" styleName="voucher-fancy-text">Gift Voucher</div>
          </div>
          <div className="col-6" styleName="right-side">
            <label>Select voucher type</label>
            <select className="form-control">
              <option>A</option>
              <option>B</option>
              <option>C</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  )
}
