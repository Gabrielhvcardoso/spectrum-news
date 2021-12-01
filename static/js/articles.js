/**
 * @author Gabriel Cardoso
 * Available everywhere, use to open an article
 */
function openArticle(id, newTab = false) {
  const link = `${location.protocol}//${location.host}/spectrum/article-${id}`;
  window.open(link, newTab ? '_blank' : '_self');
}