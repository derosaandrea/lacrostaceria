/*
 * require js configuration
 */
requirejs.config({
  paths: {
    vendor: 'modules/vendor',
    ottomani: 'modules/ottomani',
    underscore: 'modules/vendor/underscore-min',
    jquery: 'libs/jquery-1.9.1.min',
    jquery_migrate: 'libs/jquery-migrate-1.2.1.min'
  },
  waitSeconds : 20,
  shim: {

  }
});