<header id="admin-header">
  <span style="cursor: pointer;" onclick="goToWebsite()">Spectrum Admin</span>
  <a class="logout-button" href="admin/?logout" role="button">Sair</a>
</header>

<script>

  function goToWebsite() {
    window.open('/spectrum', '_blank').focus()
  }

</script>