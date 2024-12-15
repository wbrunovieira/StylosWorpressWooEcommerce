export const toCamelCase = (text: string): string =>
	text.replace(/-(?<letter>[a-z])/g, (_, letter: string) => letter.toUpperCase())

export const trimLeadingChar = (text: string, character: string): string =>
	character === text.charAt(0) ? text.slice(1) : text

export const trimTrailingChar = (text: string, character: string): string =>
	character === text.charAt(text.length - 1) ? text.slice(0, -1) : text
