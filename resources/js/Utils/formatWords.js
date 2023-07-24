const words = [{
  'IMAGE URL': '#',
  NAME: 'NOME',
  DESCRIPTION: 'DESCRIÇÃO',
  CATEGORY: 'CATEGORIA',
  PRICE: 'VALOR',
  AMOUNT: 'QUANTIDADE',
  ACTION: 'AÇÕES'

}];
  
export function formatWord(word) {
  const find = words.find(item => item[word])

  return find ? 
    find[word] : word;
}
