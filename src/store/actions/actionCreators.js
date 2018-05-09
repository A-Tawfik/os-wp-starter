import API from "../../helpers/api";

 // get posts
export const getPosts = (args={}) =>  (dispatch, getState) =>  {

    if(!getState().posts.fetching){
        dispatch({
            type: "FETCH_POSTS"
        })

        API.then(site=> site.foods().then( function(posts){

                dispatch({
                    type: "UPDATE_POST_LIST",
                    payload: posts
                })

            }).then( () => {
                dispatch({
                    type: "CANCEL_FETCHING"
                })
            })
        ).catch(function(err){

            console.log("err", err)
            dispatch({
                type: "ADD_ERROR",
                payload: [err]
            })
            dispatch({
                type: "CANCEL_FETCHING"
            })

        });

    }
}
