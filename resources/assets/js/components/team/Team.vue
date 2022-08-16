<template>
    <div class="property-listing-header">
        <span class="property-count left">8 agents found</span>
        <form action="#" method="get" class="right">
            <select name="sort_by" onchange="this.form.submit();" style="display: none;">
                <option value="date_desc">New to Old</option>
                <option value="date_asc">Old to New</option>
                <option value="price_desc">Properties (High to Low)</option>
                <option value="price_asc">Properties (Low to High)</option>
            </select><div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: 204px;" title=""><a class="chosen-single"><span>New to Old</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chosen-results"></ul></div></div>
        </form>
        <div class="property-layout-toggle right">
            <a href="agent-listing-grid-sidebar.html" class="property-layout-toggle-item"><i class="fa fa-th-large"></i></a>
            <a href="agent-listing-row-sidebar.html" class="property-layout-toggle-item active"><i class="fa fa-bars"></i></a>
        </div>
        <div class="clear"></div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component Team.')
        }
    }
</script>
