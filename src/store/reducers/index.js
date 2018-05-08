import { combineReducers } from 'redux';



export const posts = ( state={} , action ) => {
  if (action.type === "GET_POSTS") {
    return posts
  }
}

const rootReducer = combineReducers({posts});

export default rootReducer;
