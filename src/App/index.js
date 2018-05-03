import React, { Component } from 'react';
import {bindActionCreators} from 'redux';
import {connect} from 'react-redux';
import * as actionCreators from '../store/actions/actionCreators';
import '../assets/css/sass/style.scss';
import Footer from '../Components/Footer';
import Header from '../Components/Header';


class App extends Component {
  render (){
    return(
      <div className="os-l-container">
        <Header {...this.props} />
        {React.cloneElement(this.props.children , this.props)}
        <Footer {...this.props} />
      </div>
    )
  }
}


function mapStateToProps(state){
  return{
    posts: state.posts,
    comments: state.comments
  }
}

function mapDispatchToProps(dispatch){
  return bindActionCreators(actionCreators, dispatch);
}




export default connect(mapStateToProps, mapDispatchToProps)(App);;
