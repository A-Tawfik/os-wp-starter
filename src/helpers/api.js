import WPAPI from 'wpapi';
import {apiURL, admin } from './securepassword';


const apiPromise = WPAPI.discover( apiURL )

export default apiPromise;
