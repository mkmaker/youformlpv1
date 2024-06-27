module.exports = {
 content: require('fast-glob').sync([
    'source/**/*.{blade.php,blade.md,md,html,vue}',
    'config.php',
    '!source/**/_tmp/*' // exclude temporary files
  ],{ dot: true }),
  theme: {
    extend: {
      colors: {
        'coral': '#FF7F4A',
        'lavender-rose': '#FF94E7',
        'aquamarine': '#45AD94',
        'vivid-yellow': '#FFE711',
        'pale-violet': '#C994FF',
        'medium-champagne': '#F6E1A8',
        'sasquatch-socks': '#FF4F7E',

      },
      dropShadow: {
        '3xl': '3px 3px 0px rgba(0, 0, 0, 1)',
        '4xl': '5px 5px 0px rgba(0, 0, 0, 1)',
        '5xl': '6px 6px 0px rgba(0, 0, 0, 1)',
        '6xl': '7px 7px 0px rgba(0, 0, 0, 1)',
      }
      
    }
  },
  plugins: [
    require('@tailwindcss/forms')
  ]
};
