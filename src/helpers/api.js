import WPAPI from 'wpapi';
import {apiURL, admin } from './securepassword';

// var wp = new WPAPI({ endpoint: apiURL });
// wp.posts().get(function (err, data) {
//   if (err){
//     console.log("error", err)
//   }
//
//   console.log("success",data)
// })



var apiPromise = WPAPI.discover( apiURL ).then(function( site ) {
    return site.auth(admin);
});

export default apiPromise;
