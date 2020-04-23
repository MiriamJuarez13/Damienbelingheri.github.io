<script type="text/javascript">
  (function () {
    var options = {
      whatsapp: "0771232068", // WhatsApp number
      email: "damien.belingheri@fr", // Email
      call_to_action: "Message us", // Call to action
      button_color: "#129BF4", // Color of button
      position: "right", // Position may be 'right' or 'left'
      order: "whatsapp,email", // Order of buttons
    };
    var proto = document.location.protocol,
      host = "getbutton.io",
      url = proto + "//static." + host;
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url + '/widget-send-button/js/init.js';
    s.onload = function () {
      WhWidgetSendButton.init(host, proto, options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
  })();
</script>