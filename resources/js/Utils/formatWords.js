const words = [{
  'IMAGE URL': '#',
  NAME: 'DESCRIÇÃO',
  CATEGORY: 'CATEGORIA',
  PRICE: 'VALOR',
  ACTION: 'AÇÕES'

}];
  
export function formatWord(word) {
  const find = words.find(item => item[word])

  return find ? 
    find[word] : word;
}
