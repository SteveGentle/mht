// jquery snippet to make jQuery UI work with newer version of jQuery/jQuery migrate
// cf. http://vanillaforums.org/discussion/26755/running-newer-version-of-jquery-1-9-compatability-layer
$.curCSS = function (element, attrib, val) {
    $(element).css(attrib, val);
};