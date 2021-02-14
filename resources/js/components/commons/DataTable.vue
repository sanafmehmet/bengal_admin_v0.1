<template>
    <table class="table is-bordered data-table">
        <thead>
            <tr>
                <th v-for="column in columns" :key="column.name" @click="$emit('sort', column.name)"
                    :class="sortKey === column.name ? (sortOrders[column.name] > 0 ? 'sorting_desc' : 'sorting_asc') : 'sorting'"
                    :style="'width:'+column.width+';'+'cursor:pointer;' + 'color:green;' + 'font-weight:bold'">
                    {{column.label}}
                </th>
            </tr>
        </thead>
        <slot></slot>
    </table>
</template>

<script>
    export default {
        props: ['columns', 'sortKey', 'sortOrders']
    }
</script>