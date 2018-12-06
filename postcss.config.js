const postcssPresetEnv = require('postcss-preset-env');
const postcssUrl = require('postcss-url');
const postcssImport = require('postcss-import');

module.exports = {
  plugins: [
    postcssImport(),
    postcssUrl(),
    postcssPresetEnv({
      stage: 1,
      features: {
        'custom media queries': true,
        'nesting-rules': true
      }
    })
  ]
};
