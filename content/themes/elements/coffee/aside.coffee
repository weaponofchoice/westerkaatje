Pace.on 'done', ->
  body = $('body')
  overlay = $('.overlay')

  aside = $('aside')
  open = $('.aside-open')
  close = $('.aside-close')

  # open aside
  open.click ->
    aside.addClass "is-open"
    body.addClass "aside-active"

  # close aside
  close.click ->
    aside.removeClass "is-open"
    body.removeClass "aside-active"

  # close with overlay
  overlay.click ->
    aside.removeClass "is-open"
    body.removeClass "aside-active"
