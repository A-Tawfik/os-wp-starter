import React, { Component } from 'react';
import { Link } from 'react-router';
import '../assets/css/sass/style.scss';

class Main extends Component {
  render (){
    return(
      <div className="os-l-container">
        {React.cloneElement(this.props.children, this.props)}
      </div>
    )
  }
}


export default Main;
