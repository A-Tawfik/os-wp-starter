import {createStore, compose, applyMiddleware, combineReducers} from 'redux';
import { syncHistoryWithStore, routerReducer } from 'react-router-redux';
import thunk from 'redux-thunk';
import  { browserHistory } from 'react-router';

// Import root reducer
import rootReducer from './reducers';

const defaultState = {

};

function consoleLogger({ getState }) {
  return next => action => {
    console.log("will dispatch", action)
    const returnValue = next(action)
    console.log('state after dispatch', getState())
    return returnValue
  }
}

const enhancers = compose(
  applyMiddleware(thunk, consoleLogger),
  //Adds redux dev tools extension capability
  window.__REDUX_DEVTOOLS_EXTENSION__ ? window.__REDUX_DEVTOOLS_EXTENSION__(): f => f

);

const store = createStore(
  combineReducers({...rootReducer, routing: routerReducer}),
  defaultState,
  enhancers)
export const history = syncHistoryWithStore(browserHistory, store)

if (module.hot) {
  module.hot.accept('./reducers/',()=>{
    const nextRootReducer = require('./reducers/index').default;
    store.replaceReducer(nextRootReducer);
  })
};



export default store;

// (initialState={}) => {
// 	return applyMiddleware(thunk)(store)
// }
