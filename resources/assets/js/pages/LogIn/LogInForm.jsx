import React from 'react'
import {Link} from 'react-router-dom'
import {Formik, Form, Field} from 'formik'

import {linkStyle} from 'constants/styles'
import {email as emailRegex} from 'constants/regexes'
import {PasswordFormLine, TextFormLine, NeutralButton} from 'components'

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

export default ({onSubmit}) => {
  return (
    <Formik
      onSubmit={onSubmit}
      validate={validateLogin}
      initialValues={{email: '', password: ''}}
    >
      <div className="kt-grid kt-grid--ver kt-grid--root kt-page">
        {props => (
          <Form>
            <Field
              type="text"
              name="email"
              labelText="Email"
              component={TextFormLine}
            />
            <Field
              type="password"
              name="password"
              labelText="Password"
              component={PasswordFormLine}
            />
            <div className="flex items-center">
              <Link className={linkStyle} to="/signup">
                Or Signup
              </Link>
              <span className="inline-block px-2">|</span>
              <Link className={linkStyle} to="/forgot-password">
                Forgot Password?
              </Link>
              <NeutralButton className="ml-auto" type="submit">
                Log In
              </NeutralButton>
            </div>
          </Form>
        )}
        <div className="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin" id="kt_login">
          <div className="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor"
               style={{backgroundImage: "url('assets/media/bg/bg-3.jpg')"}}>
            <div className="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
              <div className="kt-login__container">
                <div className="kt-login__logo">
                  <a href="#">
                    <img src="assets/media/logos/logo-5.png"/>
                  </a>
                </div>
                <div className="kt-login__signin">
                  <div className="kt-login__head">
                    <h3 className="kt-login__title">Sign In To Admin</h3>
                  </div>
                  <form className="kt-form" action="">
                    <div className="input-group">
                      <input className="form-control" type="text" placeholder="Email" name="email" autoComplete="off"/>
                    </div>
                    <div className="input-group">
                      <input className="form-control" type="password" placeholder="Password" name="password"/>
                    </div>
                    <div className="row kt-login__extra">
                      <div className="col">
                        <label className="kt-checkbox">
                          <input type="checkbox" name="remember"/> Remember me
                          <span/>
                        </label>
                      </div>
                      <div className="col kt-align-right">
                        <a href="javascript:;" id="kt_login_forgot" className="kt-login__link">Forget Password ?</a>
                      </div>
                    </div>
                    <div className="kt-login__actions">
                      <button id="kt_login_signin_submit"
                              className="btn btn-brand btn-elevate kt-login__btn-primary">Sign In
                      </button>
                    </div>
                  </form>
                </div>
                <div className="kt-login__signup">
                  <div className="kt-login__head">
                    <h3 className="kt-login__title">Sign Up</h3>
                    <div className="kt-login__desc">Enter your details to create your account:</div>
                  </div>
                  <form className="kt-form" action="">
                    <div className="input-group">
                      <input className="form-control" type="text" placeholder="Fullname" name="fullname"/>
                    </div>
                    <div className="input-group">
                      <input className="form-control" type="text" placeholder="Email" name="email" autoComplete="off"/>
                    </div>
                    <div className="input-group">
                      <input className="form-control" type="password" placeholder="Password" name="password"/>
                    </div>
                    <div className="input-group">
                      <input className="form-control" type="password" placeholder="Confirm Password" name="rpassword"/>
                    </div>
                    <div className="row kt-login__extra">
                      <div className="col kt-align-left">
                        <label className="kt-checkbox">
                          <input type="checkbox" name="agree"/>I Agree the <a href="#"
                                                                              className="kt-link kt-login__link kt-font-bold">terms
                          and conditions</a>.
                          <span/>
                        </label>
                        <span className="form-text text-muted"></span>
                      </div>
                    </div>
                    <div className="kt-login__actions">
                      <button id="kt_login_signup_submit"
                              className="btn btn-brand btn-elevate kt-login__btn-primary">Sign Up
                      </button>
                      &nbsp;&nbsp;
                      <button id="kt_login_signup_cancel"
                              className="btn btn-light btn-elevate kt-login__btn-secondary">Cancel
                      </button>
                    </div>
                  </form>
                </div>
                <div className="kt-login__forgot">
                  <div className="kt-login__head">
                    <h3 className="kt-login__title">Forgotten Password ?</h3>
                    <div className="kt-login__desc">Enter your email to reset your password:</div>
                  </div>
                  <form className="kt-form" action="">
                    <div className="input-group">
                      <input className="form-control" type="text" placeholder="Email" name="email" id="kt_email"
                             autoComplete="off"/>
                    </div>
                    <div className="kt-login__actions">
                      <button id="kt_login_forgot_submit"
                              className="btn btn-brand btn-elevate kt-login__btn-primary">Request
                      </button>
                      &nbsp;&nbsp;
                      <button id="kt_login_forgot_cancel"
                              className="btn btn-light btn-elevate kt-login__btn-secondary">Cancel
                      </button>
                    </div>
                  </form>
                </div>
                <div className="kt-login__account">
                  <span className="kt-login__account-msg">Don't have an account yet ?</span>
                  &nbsp;&nbsp;
                  <a href="javascript:;" id="kt_login_signup" className="kt-login__account-link">Sign Up!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </Formik>
  )
}
