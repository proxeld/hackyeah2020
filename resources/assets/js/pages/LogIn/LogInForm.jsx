import React from 'react'
import { Formik, Form, Field } from 'formik'

import { email as emailRegex } from 'constants/regexes'

const validateLogin = (values = {}) => {
  let errors = {}

  if (!values.email) {
    errors.email = 'This field is required'
  } else if (!emailRegex.test(values.email)) {
    errors.email = 'Invalid email address'
  }

  if (!values.password) {
    errors.password = 'This field is required'
  }

  return errors
}

const TextInputLogin = ({className = '', ...props}) => {
  return (
    <input
      placeholder={props.placeholder}
      {...props.field}
      type="text"
      className={`form-control`}
    />
  )
}

const TextInputPassword = ({className = '', ...props}) => {
  return (
    <input
      placeholder={props.placeholder}
      {...props.field}
      type="password"
      className={`form-control`}
    />
  )
}

export default ({onSubmit}) => {
  return (
    <Formik
      onSubmit={onSubmit}
      validate={validateLogin}
      initialValues={{email: '', password: ''}}
    >
      {props => (
        <Form>
          <div className="kt-grid kt-grid--ver kt-grid--root kt-page" style={{height: '100vh'}}>
            <div className="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin">
              <div className="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor"
                   style={{backgroundImage: "url('../../../img/bg-3.jpg')"}}>
                <div className="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                  <div className="kt-login__container">
                    <div className="kt-login__logo">
                      <a href="#">
                        <img src="../../../img/shield.png" alt="shield" className="img-fluid" style={{maxWidth: '200px'}} />
                      </a>
                    </div>
                    <div className="kt-login__signin">
                      <div className="kt-login__head">
                        <h3 className="kt-login__title">Sign In To Admin Panel</h3>
                      </div>
                      <div className="kt-form">
                        <div className="input-group">
                          <Field
                            type="text"
                            name="email"
                            placeholder="Email"
                            component={TextInputLogin}
                          />
                        </div>
                        <div className="input-group">
                          <Field
                            type="password"
                            name="password"
                            placeholder="Password"
                            component={TextInputPassword}
                          />
                        </div>
                        <div className="row kt-login__extra">
                          <div className="col">
                            <label className="kt-checkbox">
                              <input type="checkbox" name="remember"/> Remember me
                              <span/>
                            </label>
                          </div>
                          <div className="col kt-align-right">
                            <a href="#" className="kt-login__link">Forget Password?</a>
                          </div>
                        </div>
                        <div className="kt-login__actions">
                          <button
                            className="btn btn-brand btn-elevate kt-login__btn-primary"
                            type="submit"
                          >
                            Sign In
                          </button>
                        </div>
                      </div>
                    </div>
                    <div className="kt-login__account">
                      <span className="kt-login__account-msg">Don't have an account yet?</span>
                      &nbsp;&nbsp;
                      <a href="#" id="kt_login_signup" className="kt-login__account-link">Sign Up!</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </Form>
      )}
    </Formik>
  )
}
