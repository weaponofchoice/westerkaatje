$ ->
  Pace.on 'done', ->
    $('body').removeClass "is-loading"
    return