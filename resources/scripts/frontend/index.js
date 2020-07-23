// eslint-disable-next-line no-unused-vars
import config from '@config';
import './vendor/*.js';
import '@styles/frontend';
import '@images/favicon.ico';
import 'airbnb-browser-shims';
import './spritesvg';

// Your code goes here ...

// WPEmerge auto-load all images from /resources/images/
const themeImages = require.context('@images', true, /\.(png|jpe?g|svg|webp)$/);
themeImages.keys().forEach(themeImages);