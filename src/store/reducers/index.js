import { combineReducers } from 'redux';
import { routerReducer } from 'react-router-redux';


export const fetching = (state=false, action) => {

  switch(action.type) {

    case "FETCH_POSTS" :
      return true

    case "CANCEL_FETCHING" :
      return false

      case "UPDATE_POST_LIST" :
        return false

    default:
      return state
  }
}

export const postList = (state=[], action) => {

  switch(action.type) {

    case "CLEAR_POSTS" :
      return []

    case "UPDATE_POST_LIST" :
      return action.payload

    default :
      return state
  }

}


export const errors = (state=[], action) => {
    switch(action.type) {

      case "CLEAR_ERRORS" :
        return []

      case "ADD_ERROR" :
        return [
           ...state,
           action.payload
         ]

      default :
        return state
    }
}


export default combineReducers({
    routing: routerReducer ,
    errors,
    posts: combineReducers({
        fetching,
        postList
  })
})
