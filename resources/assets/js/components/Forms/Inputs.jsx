import React from 'react'

const textInputClasses =
  'form-control'

export const TextInput = ({ className = '', ...props }) => (
  <input
    {...props}
    type="text"
    className={`${textInputClasses} h-12 px-2 ${className}`}
  />
)

export const PasswordInput = ({ className = '', ...props }) => (
  <input
    {...props}
    type="password"
    className={`${textInputClasses} h-12 px-2 ${className}`}
  />
)

export const TextArea = ({ className = '', ...props }) => (
  <textarea
    {...props}
    className={`${textInputClasses} h-48 p-2 ${className}`}
  />
)
