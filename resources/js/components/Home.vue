<template>
    <div class="page page-center" >
          <div class="container-tight py-4">
            <div class="empty">
              <div class="empty-img"><img src="backend/demo/static/illustrations/undraw_quitting_time_dm8t.svg" height="128"  alt="">
              </div>
              <p class="empty-title">Simple Biodata Management App</p>
              <!-- <p class="empty-subtitle text-muted">
                Sorry for the inconvenience but we’re performing some maintenance at the moment. We’ll be back online shortly!
              </p> -->
              <div class="empty-action">
                <router-link to="/create" class="btn btn-primary">
                  <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="5" y1="12" x2="19" y2="12" /><line x1="5" y1="12" x2="11" y2="18" /><line x1="5" y1="12" x2="11" y2="6" /></svg> -->
                  Store Biodata
                </router-link>
                <br><br>
                <router-link to="/list" class="btn btn-primary">
                  <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="5" y1="12" x2="19" y2="12" /><line x1="5" y1="12" x2="11" y2="18" /><line x1="5" y1="12" x2="11" y2="6" /></svg> -->
                  List Biodata
                </router-link>
              </div>
            </div>
          </div>
        </div>
</template>