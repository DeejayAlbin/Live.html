<html>
<head>
  <title>IND VS AUS HINDI @𝗧𝗘𝗖𝗛𝗜𝗘𝗦𝗞𝗘𝗘𝗗𝗔</title>
  <meta charset="UTF-8">
  <!-- Player -->
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/clappr/0.2.86/clappr.min.js"></script>
  <!-- Video resolution switcher -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/gh/clappr/clappr-level-selector-plugin@latest/dist/level-selector.min.js"></script>
</head>

<body>
  <div id="player"><marquee direction="alternative">𝗝𝗢𝗜𝗡 𝗢𝗨𝗥 𝗧𝗘𝗟𝗘𝗚𝗥𝗔𝗠 𝗖𝗛𝗔𝗡𝗡𝗘𝗟 @𝗧𝗘𝗖𝗛𝗜𝗘𝗦𝗞𝗘𝗘𝗗𝗔 marquee></div>
  <script>
    var player = new Clappr.Player({
      source: "https://sonydai.akamaized.net/hls/live/2022316/DAI12ME/master.m3u8?hdnea=exp=1607153868~acl=/*~hmac=9d6a57330ac330b7ed4958b278f6e52b3182012b5b92ac0124d2950186cac2be",
      poster: '/img/ind-vs-aus-live.jpg',
  mute: true,
  height: 360,
  width: 640,
  watermark: "/img/logo.png",
  position: 'top-right',
  watermarkLink: "http://telegram.dog/techieskeeda",
      parentId: "#player",
      plugins: {
        core: [LevelSelector]
      },
      levelSelectorConfig: {
        //Optional : custom labels
        title: '動画品質',
        labels: {
          0: 'Very low',
          1: 'Low ',
          2: 'Medium ',
          3: 'HQ',
          4: 'High',
          5: 'Very high',
          6: 'Extremy high',
          7: 'Highest'
        },
      },
    });
  </script>
</body>
</html>
