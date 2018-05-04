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

// endpoint: window.WP_API_Settings.endpoint,
//     nonce: window.WP_API_Settings.nonce

// const loginObj = window.WP_API_Settings ? {
//     endpoint: window.WP_API_Settings.root,
//     nonce: window.WP_API_Settings.nonce
//   } : admin

const apiPromise = WPAPI.discover( apiURL ).then(function( site ) {
    console.log("this", site.frontpage())
    return site.auth(admin);
});

export default apiPromise;
