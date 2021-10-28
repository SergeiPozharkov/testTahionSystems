function confirmCheck(atr) {
    const modal = confirm('Вы действительно хотите удалить данного пользователя?')
    if (modal === false) {
        atr.href = '?';
    }
}
