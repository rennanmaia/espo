$('.btn-menu').click(function () {
  $('.menu').show()
})

$('.btn-close').click(function () {
  $('.menu').hide()
  return false
})

$('.btn-new-space').click(function () {
  let url = 'new_space_form.php'
  window.location.assign(url)
})

$('.menu').click(function () {
  $('.menu').hide()
})
