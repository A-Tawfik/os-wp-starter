import API from "../../helpers/api";




function posts(res){
  console.log(res)
}

 // get posts
export const getPosts = (args = {}) => {
  let postArr = []
  let postProm = API.then(site=> site.posts() )
  postProm.then(res => {postArr = posts(res)} )

  return(
    {type: "GET_POSTS",
    payload: postArr}
  )
};
