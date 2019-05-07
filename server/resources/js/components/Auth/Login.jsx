import React from 'react'
import styled from '@emotion/styled'
import { Form, Icon, Input, Button, Checkbox } from 'antd'
import { Mutation } from 'react-apollo'
import { login } from '@graphql/Auth.graphql'
/** @jsx jsx */
import { jsx, css, keyframes } from '@emotion/core'
import { compose } from 'recompose'
import { withCookies } from 'react-cookie'
import { withAuth } from '@auth'
import Background from '@layout/DynamicBackground'

const SlideIn = keyframes`
  0%   { 
    transform: translateX(200%); 		
  }
  100% { 
    transform: translateX(0%); 
  }
`

const LoginPanel = styled.div`
  background-color: #fff;
  width: 40%;
  display: block;
  padding: 40px;
  -webkit-box-shadow: 0px 0px 14px -1px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 0px 0px 14px -1px rgba(0, 0, 0, 0.75);
  box-shadow: 0px 0px 14px -1px rgba(0, 0, 0, 0.75);
  overflow: hidden;
`

const LoginFormForgot = styled.a`
  float: right;
`

const Title = styled.h1`
  padding: 10px;
  margin: 22px 0px;
  width: 100%;
  text-align: center;
  text-transform: uppercase;
  font-weight: bold;
  font-size: 25px;
`

class LoginForm extends React.Component {
  handleSubmit = (event, login) => {
    event.preventDefault()
    this.props.form.validateFields((err, values) => {
      if (!err) {
        login({
          variables: {
            data: values,
          },
        })
          .then(response => {
            // this.$router.push({name: 'dashboard'})
            const {
              data: { login },
            } = response
            if (login) {
              console.log(this.props)
              this.props.setIsAuthenticated(true)
            }
          })
          .catch(error => {
            this.error = 'Username or password is incorrect'
          })
      }
    })
  }

  render() {
    const {
      form: { getFieldDecorator },
      cookies,
    } = this.props
    return (
      <Mutation mutation={login}>
        {(login, { data, loading, error }) => (
          <Background>
            <LoginPanel>
              <Title>Login</Title>
              <Form onSubmit={event => this.handleSubmit(event, login)}>
                <Form.Item>
                  {getFieldDecorator('username', {
                    rules: [
                      {
                        required: true,
                        message: 'Please input your username!',
                      },
                    ],
                  })(
                    <Input
                      css={css`
                        animation: ${SlideIn} 0.5s ease;
                      `}
                      prefix={
                        <Icon
                          type="user"
                          style={{ color: 'rgba(0,0,0,.25)' }}
                        />
                      }
                      placeholder="Username"
                    />
                  )}
                </Form.Item>
                <Form.Item>
                  {getFieldDecorator('password', {
                    rules: [
                      {
                        required: true,
                        message: 'Please input your Password!',
                      },
                    ],
                  })(
                    <Input
                      css={css`
                        animation: ${SlideIn} 0.7s ease;
                      `}
                      prefix={
                        <Icon
                          type="lock"
                          style={{ color: 'rgba(0,0,0,.25)' }}
                        />
                      }
                      type="password"
                      placeholder="Password"
                    />
                  )}
                </Form.Item>
                <Form.Item>
                  {getFieldDecorator('remember', {
                    valuePropName: 'checked',
                    initialValue: true,
                  })(<Checkbox>Remember me</Checkbox>)}
                  <LoginFormForgot href="">Forgot password</LoginFormForgot>
                  <Button
                    type="primary"
                    htmlType="submit"
                    style={{
                      width: '100%',
                    }}
                    loading={loading}
                  >
                    Login
                  </Button>
                  <a href="">Create Account</a>
                </Form.Item>
              </Form>
            </LoginPanel>
          </Background>
        )}
      </Mutation>
    )
  }
}

const WrappedLoginForm = Form.create({ name: 'login' })(LoginForm)

export default compose(
  withCookies,
  withAuth
)(WrappedLoginForm)
