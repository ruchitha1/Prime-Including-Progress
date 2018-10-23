    "systemPrivate",
    "tabs",
    "chrome://favicon/",
    "chrome://resources/"
  ],
  "chrome_url_overrides": {
    "bookmarks": "main.html"
  },
  "content_security_policy":
    "object-src 'none'; script-src chrome://resources 'self' blob: filesystem:"
}
{
  "key": "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDqOhnwk4+HXVfGyaNsAQdU/js1Na56diW08oF1MhZiwzSnJsEaeuMN9od9q9N4ZdK3o1xXOSARrYdE+syV7Dl31nf6qz3A6K+D5NHe6sSB9yvYlIiN37jdWdrfxxE0pRYEVYZNTe3bzq3NkcYJlOdt1UPcpJB+isXpAGUKUvt7EQIDAQAB",
  "name": "Cloud Print",
  "version": "0.1",
  "description": "Cloud Print",
  "icons": {
  },
  "app": {
    "launch": {
      "web_url": "https://www.google.com/cloudprint"
    },
    "urls": [
      "https://www.google.com/cloudprint/enable_chrome_connector"
    ]
  },
  "permissions": [
    "cloudPrintPrivate"
  ],
  "display_in_launcher": false
}
<html>
<head>
<title>Inspectable pages</title>
<style>
body {
  color: #222;
  font-family: Helvetica, Arial, sans-serif;
  margin: 0;
  text-shadow: rgba(255, 255, 255, 0.496094) 0px 1px 0px;
}

#caption {
  font-size: 16px;
  margin-top: 15px;
  margin-bottom: 10px;
  margin-left: 20px;
  height: 20px;
  text-align: left;
}

#items {
  display: flex;
  flex-direction: column;
  margin: 10px;
}

.item {
  color: #222;
  display: flex;
  flex-direction: row;
  text-decoration: none;
  padding: 10px;
  -webkit-transition-property: background-color, border-color;
  -webkit-transition: background-color 0.15s, 0.15s;
  -webkit-transition-delay: 0ms, 0ms;
}

.item:not(.connected):hover {
  background-color: rgba(242, 242, 242, 1);
  border-color: rgba(110, 116, 128, 1);
  color: 