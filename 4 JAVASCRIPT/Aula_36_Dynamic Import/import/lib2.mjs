export function getEnderecoByCEP(cep) {
    return fetch(`http://viacep.com.br/ws/${cep}/json/`)
    .then(response => response.json())
}
