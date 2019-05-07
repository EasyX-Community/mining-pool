import React from 'react'
import styled from '@emotion/styled'

const Wrapper = styled.div`
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  width: 100%;
  height: 100vh;
`

export default class Background extends React.Component {
  constructor(props) {
    super(props)
    this.step = 0.45323
    this.interval = null
  }

  state = {
    colors: new Array(
      [62, 35, 255],
      [60, 255, 60],
      [255, 35, 98],
      [45, 175, 230],
      [255, 0, 255],
      [255, 128, 0]
    ),
    colorIndices: [0, 1, 2, 3],
    gradientSpeed: 0.002,
  }

  updateGradient = () => {
    const { colors, colorIndices, gradientSpeed } = this.state

    if ($ === undefined) return

    let c0_0 = colors[colorIndices[0]]
    let c0_1 = colors[colorIndices[1]]
    let c1_0 = colors[colorIndices[2]]
    let c1_1 = colors[colorIndices[3]]

    let istep = 1 - this.step
    let r1 = Math.round(istep * c0_0[0] + this.step * c0_1[0])
    let g1 = Math.round(istep * c0_0[1] + this.step * c0_1[1])
    let b1 = Math.round(istep * c0_0[2] + this.step * c0_1[2])
    let color1 = 'rgb(' + r1 + ',' + g1 + ',' + b1 + ')'

    let r2 = Math.round(istep * c1_0[0] + this.step * c1_1[0])
    let g2 = Math.round(istep * c1_0[1] + this.step * c1_1[1])
    let b2 = Math.round(istep * c1_0[2] + this.step * c1_1[2])
    let color2 = 'rgb(' + r2 + ',' + g2 + ',' + b2 + ')'

    $('#gradient')
      .css({
        background:
          '-webkit-gradient(linear, left top, right top, from(' +
          color1 +
          '), to(' +
          color2 +
          '))',
      })
      .css({
        background:
          '-moz-linear-gradient(left, ' + color1 + ' 0%, ' + color2 + ' 100%)',
      })

    this.step += gradientSpeed
    if (this.step >= 1) {
      this.step %= 1
      colorIndices[0] = colorIndices[1]
      colorIndices[2] = colorIndices[3]

      //pick two new target color indices
      //do not pick the same as the current one
      colorIndices[1] =
        (colorIndices[1] +
          Math.floor(1 + Math.random() * (colors.length - 1))) %
        colors.length
      colorIndices[3] =
        (colorIndices[3] +
          Math.floor(1 + Math.random() * (colors.length - 1))) %
        colors.length
    }
  }

  componentWillUnmount() {
    clearInterval(this.interval)
  }

  componentDidMount() {
    this.interval = setInterval(this.updateGradient, 10)
  }

  render() {
    return <Wrapper id="gradient">{this.props.children}</Wrapper>
  }
}
