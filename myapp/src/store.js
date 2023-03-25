import { writable, get } from 'svelte/store'

export let data = writable(localStorage._data?JSON.parse(localStorage.getItem('_data')):{})
export let getdata = get(data);
export let datadb = writable({});
// export let datadb = writable({
   
//         RecordToBeUpload: [],
//         UploadedSuccess: [],
//         AccountThatHasError: [],
//         uploadcagamasdata: {},
//         uploadcagamasdataDetail: {},
//         cagamasdataid: "",
   
  
// });